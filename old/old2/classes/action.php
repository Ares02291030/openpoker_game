<?php



class Action {
    private $deck; // Object Deck
    private $dealer; // Object Dealer
    private $table; // Object Table
    private $players;
    private $request;
    public $debug = false;
    
    function __construct(Deck $deck, Dealer $dealer, Table $table, $players, $request) {
        $this->deck = $deck;
        $this->dealer = $dealer;
        $this->table = $table;
        $this->players = $players;
        $this->gateway = $gateway;
        $this->request = $request;
    }
    
    public function newGame($players = array()) {
        for($i=0; $i<count($players); $i++) {
            $this->table->seatPlayer($players[$i]);
            }
            if($this->debug) { echo '<br>Inside class: ' . __CLASS__ . ', function: ' . __FUNCTION__; }
        }

    public function newHand() {
        $this->dealer->shuffleDeck($this->deck);     
        for($i=0; $i<count($this->players); $i++) {
            $this->dealer->dealPlayer($this->deck, $this->players[$i]);
        }
    }
    
    public function dealFlop() {
        $this->dealer->dealBurn($this->deck);
        $this->table->showFlop($this->dealer->dealFlop($this->deck, $this->table));
    }
    public function dealTurn() {
        $this->dealer->dealBurn($this->deck);
        $this->table->showTurn($this->dealer->dealTurn($this->deck, $this->table));
    }
    public function dealRiver() {
        $this->dealer->dealBurn($this->deck);
        $this->table->showRiver($this->dealer->dealRiver($this->deck, $this->table));
    }    
    public function shuffleCards() {
        $this->dealer->shuffleDeck($this->deck);
    }
    public function showHand($player) {
        echo  $this->players[0]->showHand();
    }
    
    public function showProfilePhoto($player) {
        $this->players[$player]->showProfilePhoto();
    }   
    
}
?>
