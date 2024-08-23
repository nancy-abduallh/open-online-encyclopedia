<?php

// Assume List and Bookmark classes are defined elsewhere

class Device {
    private $deviceId;
    private $type;
    private $os;

    // Constructor to initialize attributes
    public function __construct($deviceId, $type, $os) {
        $this->deviceId = $deviceId;
        $this->type = $type;
        $this->os = $os;
    }

    // Setter for deviceId
    
    // Getter for deviceId
    public function getDeviceId() {
        return $this->deviceId;
    }

    // Setter for type
    public function setType($type) {
        $this->type = $type;
    }

    // Getter for type
    public function getType() {
        return $this->type;
    }

    // Setter for os
    public function setOs($os) {
        $this->os = $os;
    }

    // Getter for os
    public function getOs() {
        return $this->os;
    }

    // Method to share a list
    public function shareList(ListClass $list) {
        echo "Sharing list '{$list->getName()}' from device '{$this->deviceId}'...\n";
        
       
    }

    // Method to share bookmarks
     function shareBookmarks(array $bookmarks) {
        echo "Sharing bookmarks from device '{$this->deviceId}'...\n";
        
        
    }
}



?>