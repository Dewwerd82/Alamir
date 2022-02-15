<?php

class Kletka 
{
	public $redRed ;
	public $redGreen ;
	public $greenRed ;
	public $greenGreen ;
    public $startGreen ;
    public $startRed ;

    function __construct($redRed, $redGreen, $greenRed, $greenGreen, $startGreen, $startRed)
    {
        $this->redRed = $redRed;
		$this->redGreen = $redGreen;
		$this->greenRed = $greenRed;
		$this->greenGreen = $greenGreen;
        $this->startGreen = $startGreen;
        $this->startRed = $startRed;
        
        
    }

    // 
    public function addKletka()
    {		
        
        $redR = ($this->startRed)*$this->redRed;            // Умножаем скока с одной красной на скока будет выходить красных
        $greenR = ($this->startRed)*$this->redGreen;        // Умножаем скока с одной красной на скока будет выходить зелёных
        
        $redG = ($this->startGreen)*$this->greenRed;       // Умножаем скока с одной зелёной на скока будет выходить красных
        $greenG = ($this->startGreen)*$this->greenGreen;   // Умножаем скока с одной зелёной на скока будет выходить зелёных

        $totalRed = $redR + $redG;                          // суммируем все получившиеся красные
        $totalGreen = $greenR + $greenG;                    // суммируем все получившиеся зелёные

        $this->startRed = $totalRed;                        //устанавливаем нач. поз. для красных
        $this->startGreen = $totalGreen;                    //устанавливаем нач. поз. для зелёных
    }


}

?>