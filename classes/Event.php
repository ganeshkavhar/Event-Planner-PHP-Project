<?php
class Event {
    private $title;
    private $description;    
    private $startDate;
    private $endDate;
    private $cost;
    private $locationID;
    
    public function __construct($id, $title, $description, $sDate, $eDate, $cost, $locID) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->startDate = $sDate;
        $this->endDate = $eDate;
        $this->cost = $cost;
        $this->locationID = $locID;
    }
    
    public function getId() { return $this->id; }
    public function getTitle() { return $this->title; }
    public function getDescription() { return $this->description; }
    public function getStartDate() { return $this->startDate; }
    public function getEndDate() { return $this->endDate; }
    public function getCost() { return $this->cost; }
    public function getLocationID() { return $this->locationID; }
}
?>