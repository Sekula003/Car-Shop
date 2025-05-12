<?php
class Brojac {
    private $brojac_txt;

    public function __construct($file = "brojac.txt") {
        $this->brojac_txt = $file;
    }
    public function getCount() {
        if (file_exists($this->brojac_txt)) {
            return (int)file_get_contents($this->brojac_txt);
        } else {
            return 0;
        }
    }
    public function increment() {
        $trenutni_broj = $this->getCount();
        $trenutni_broj++;
        file_put_contents($this->brojac_txt, $trenutni_broj);
    }

    public function displayCount() {
        echo "<br><p class='brojac'>Broj poseta: " . $this->getCount() . "</p>";
    }
}
?>
