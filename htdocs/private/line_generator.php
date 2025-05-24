<?php

class LineGenerator {
  // for identation purpose
  public $tab= "\t";
  
  // dictionnary of all the paints we work with
  public $paints;
  
  // height: height of the line
  // dico1: dictionnary containing first paint
  // paintfile1: full name of the first paint file ("Huile/20230809_IlotMangrove_40x80.jpg")
  // width1: width of the first paint on the line (other width will be automatically computed
  
  function generate_double_line( $height, $id1, $width1, $id2 ) {
    $paint1= $this->paints[$id1];
    $paint2= $this->paints[$id2];
    
    // errors
    if ( $paint1 == null ) {
      echo "Cannot find " .$id1 ." in dictionnary";
      return;
    }
    if ( $paint2 == null ) {
      echo "Cannot find " .$id2 ." in dictionnary";
      return;
    }
    
    // no whitespace, no uppercase
    $tagname1= $this->create_tag_name( $id1 );
    $tagname2= $this->create_tag_name( $id2 );
    
    //
    $available_width= 885;
    $indent= "\t";
    $this->generate_part($paint1, $tagname1, $width1, $height, "gem-background-left", $indent);
    $width2= $available_width - $width1;
    $this->generate_part($paint2, $tagname2, $width2, $height, "gem-background-right", $indent);
  }
  
  function generate_part( $paint, $tagname, $width, $height, $style, $indent) {
    
    $ttab= $this->tab;	
    $this->print_line( $indent, "<div class=\"w3-display-container gem-inline " .$style ." gem-" .$tagname ."\"" );
    $this->print_line( $indent, $ttab .$ttab ."style=\"width:" .$width ."px; height: " .$height ."px;\">" );
    $this->print_line( $indent, $ttab ."<div class=\"w3-display-middle gem-hover\">" );
    $this->print_line( $indent, $ttab .$ttab .$paint->title ." </br> " .$paint->get_size() );
    $this->print_line( $indent, $ttab ."</div>" );
    $this->print_line( $indent, "</div>" );
  }
  
  function generate_style( $id, $xpos, $ypos ) {
    $paint= $this->paints[$id];
    $tagname= $this->create_tag_name( $id );
      
    // hover text color
    $color= "white";
    
    echo ".gem-" .$tagname ." {" ."\n";
    echo "    background: url('images/" .$paint->file ."');" ."\n";
    echo "    background-position: " .$xpos ."% " .$ypos ."%;" ."\n";
    echo "    background-size: cover;" ."\n";
    echo "}" ."\n";
    echo "\n";
    echo ".gem-" .$tagname .":hover {" ."\n";
    echo "    opacity: 0.2;" ."\n";
    echo "}" ."\n";
    echo "\n";
    echo ".gem-" .$tagname .":hover > .gem-hover {" ."\n";
    echo "    color: " .$color .";" ."\n";
    echo "    display: block;" ."\n";
    echo "}" ."\n";
    echo "\n";
  }

  function create_tag_name( $id ) {
    $string = str_replace(' ', '_', $id); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $id); // Removes special chars.
  }
  
  function print_line( $indent, $string ) {
    echo $indent .$string ."\n";
  }
}

?>
