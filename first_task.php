<?php 


class TV {
    const ORIGINAL_CHANNEL = 1;
    const ORIGINAL_VOLUME = 1;

    private string $manufacturer;
    private int $channel;
    private int $volume;
    public static $magic = 'ORLANDO MAGIC';


    public function __construct($manufacturer){
        $this->manufacturer = $manufacturer;
        $this->channel = self::ORIGINAL_CHANNEL;
        $this->volume = self::ORIGINAL_VOLUME;
        }
public function setChannel($channel){
    $this->channel = ($channel > 50 || $channel < 1) ? 1 : $channel;
}

public function setVolume($volume) {
    $this->volume = ($volume > 100 || $volume < 1) ? 1 : $volume;
}

public function resetToFactorySettings() {
    $this->channel = self::ORIGINAL_CHANNEL;
    $this->volume = self::ORIGINAL_VOLUME;
}

public function __toString() {
    return 'Televizorius ‘'.$this->manufacturer.'’ šiuo metu rodo '.$this->channel.' kanalą, o jo garso lygis ' . $this->volume ;
} 
}

$tv = new TV('Sony');
echo '<h3>Pradinė televizoriaus stadija:</h3>';
print_r($tv);
echo '<h3>Pakeičiam kanalą:</h3>';
$tv->setChannel(rand(-20, 80));
print_r($tv);
echo '<h3>Pakeičiam garso lygį:</h3>';
$tv->setVolume(rand(-10, 110));
print_r($tv);
echo '<h3>Atstatom į gamyklinius parametrus:</h3>';
$tv->resetToFactorySettings();
print_r($tv);
echo '<h3>Galutinis rezultatas:</h3>';
echo $tv->__toString();

echo '<br /><br />';
echo TV::$magic;
