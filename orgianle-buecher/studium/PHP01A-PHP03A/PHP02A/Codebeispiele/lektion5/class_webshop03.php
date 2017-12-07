<?php
require_once("class_artikel.php");

class webshop extends artikel
{
  public function __construct($dateiname)
  {
    parent::__construct($dateiname);
  }

  public function auswahl() # zeigt ausgewählte Artikel
  {
    if (count($this->korb) > 0)
    {
      print "<table>\n";
      print "  <tr>\n   <th>Artikel</th><th>Anzahl</th>\n  </tr>\n";
      foreach($this->korb as $key => $value)
      {
        print "  <tr>\n";
        print "    <td>".$this->artikelArray[$key]['name']."</td><td>".$value."</td>\n";
        print "  </tr>\n";
      }
      print "</table>\n";
    }
    else
      print "Keine Artikel im Warenkorb gefunden.";
  }

  public function anzeigen()
  {
    print " <table>\n":
    print "  </tr>\n  <th>Artikel</th><th>Preis</th>\n </tr>\n";
    foreach($this->artikelArray as $key => $value)
    {
      print "  <tr>\n";
      foreach($value as $subKey => $subVal)
      {
        if ($subKey == "name")
        {
          print "   <td>".$subVal."</td>";
        }
        else
        {
          print "<td>".$subVal." Euro</td>";
          print "<td><a href=\"".$_SERVER['PHP_SELF']."?id=".$key."\">In den Warenkorb</a></td>\n";
        }
      }
      print "  </tr>\n";
    }
    print " </table>\n";
  }

  private function setArtikel($daten)
  {
    $this->pdf->SetLeftMargin(35); # Setzt Rand
    $this->pdf->Cell(30,5,"Artikelnummer",1,0,'C');
    $this->pdf->Cell(60,5,"Artikel",1,0,'C');
    $this->pdf->Cell(30,5,"Preis",1,0,'R');
    foreach ($daten as $key => $value)
    {
      $this->pdf->ln();
      $this->pdf->Cell(30,5,$key,1,0,'C');
      $this->pdf->Cell(60,5,iconv('UTF-8', 'ISO-8859-15', $value['name']),1,0);
      $this->pdf->Cell(30,5,$value['preis']." Euro",1,0,'R');
    }
  }

  public function pdfliste()
  {
    $this->pdf->setTitel("Liste bestellbarer Artikel");
    $this->pdf->AliasNbPages();
    $this->pdf->AddPage();
    $this->pdf->SetFont('Times','',12);
    $text = "Sehr geehrter Kunde,\n\nvielen Dank, dass Sie sich".
            " für unser Angebot interessieren. Folgende Artikel".
            " können Sie in unserem Online-Shop (http://".$_SERVER['HTTP_HOST'].") bestellen.\n";
    $this->pdf->setText($text);

    $this->setArtikel($this->artikelArray);
    $text = "\n\nVielen Dank für Ihr Interesse.";
    $this->pdf->setText($text);
    $this->pdf->Output();
  }
}
?>