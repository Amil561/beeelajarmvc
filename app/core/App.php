
<?php
class App{
    public function __construct()
    {
        $url = $this->perseURL();
        var_dump($url);
    }

    public function perseURL()
    {
        if (isset($_GET['url'])) {
            //->Ambil value urlnya.
            $url = $_GET['url'];
            //->buang tanda '/'di akhir url.
            $url = rtrim($url, '/');
            //->filter url dari karakter2 aneh.
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //->pecah url berdasarkan tanda '/' sebagai pemisah
            $url = explode('/', $url);

            return $url;

        }
    }
} 
?>