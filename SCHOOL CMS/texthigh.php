 <?php
 $text = 'Lorem ipsum dolor sit amet, consectetuer
adipiscing elit. Vestibulum blandit mollis risus.';
 
    class highlight
    {
        public $output_text;
 
        function __construct($text, $words)
        {
            $split_words = explode( " " , $words );
            foreach ($split_words as $word)
            {
                $color = self::generate_colors();
                $text = preg_replace("|($word)|Ui" ,
                           "<span style=\"background:".$color.";\"><b>$1</b></span>" , $text );
            }
            $this->output_text = $text;
        }
 
        private function rgbhex($red, $green, $blue)
        {
            return sprintf('#%02X%02X%02X', $red, $green, $blue);
        }
 
        private function generate_colors()
        {
            $red = rand( rand(60,100) , rand(200,252) );
            $green = rand( rand(60,100) , rand(200,252) );
            $blue = rand( rand(60,100) , rand(200,252) );
 
            $color = self::rgbhex( $red , $green , $blue );
            return $color;
        }
    }
 
    $highlight = new highlight($text , 'lorem dolor blandit');
    echo $highlight->output_text;
?>