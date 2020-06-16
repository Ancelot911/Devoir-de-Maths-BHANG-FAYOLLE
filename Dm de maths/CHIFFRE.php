<!doctype html>
<html lang="fr"> 
	<head >
		<meta charset="utf-8" />
        <title>Mise en pratique</title>
        
	</head>
	<body>
        <form method="POST" action="CHIFFRE.php">
            <h1>Veuillez entrer le texte a chiffrer/dechiffrer et les clés :</h1>
            </br>
            <p>Texte a crypter :</p>
            <input type="text" name="chiffrage"/>
            </br>
            <p>Texte a decrypter :</p>
            <input type="text" name="dechiffrage"/>
            </br>
            <p>Clé a :</p>
            <input type="text" name="a"/>
            </br>
            <p>Clé b :</p>
            <input type="text" name="b"/>
            <input type="submit" value="Crypter/decripter"/>
        </form>
        </br>
        <?php
            if(isset($_POST['chiffrage']) && empty($_POST['dechiffrage']))
            {
                $message = $_POST['chiffrage'];
                
                $chaine = str_replace(array('û','ù','','^','\ ','|','{','}','€','=','*','%','ï','î','ô','ê','à','&','~','#','?','/',':','£','¤','$','ç','è','é','.','…','«','»', ',', '?', '!', ':'     ,   '(',')'     ,   " " ,'-', '°','"',"'","`","’",'_', ';', '.'), '', $message);
              
                echo "</br>";
                $lettres = str_split($chaine);
                $a=intval($_POST['a']);
                $b=intval($_POST['b']);
                echo "</br>";
                $lettresToNumb =[];
                for($i=0;$i<count($lettres);$i++)
                {
                    if($lettres[$i] == "a" || $lettres[$i] == "A" || $lettres[$i] == "à"|| $lettres[$i] == "â"){$lettresToNumb[$i]=0;}
                    else if($lettres[$i] == "b" || $lettres[$i] == "B"){$lettresToNumb[$i]=1;}
                    else if($lettres[$i] == "c" || $lettres[$i] == "C"|| $lettres[$i] == "ç"){$lettresToNumb[$i]=2;}
                    else if($lettres[$i] == "d" || $lettres[$i] == "D"){$lettresToNumb[$i]=3;}
                    else if($lettres[$i] == "e" || $lettres[$i] == "E"|| $lettres[$i] == "é"|| $lettres[$i] == "è"|| $lettres[$i] == "ê"){$lettresToNumb[$i]=4;}
                    else if($lettres[$i] == "f" || $lettres[$i] == "F"){$lettresToNumb[$i]=5;}
                    else if($lettres[$i] == "g" || $lettres[$i] == "G"){$lettresToNumb[$i]=6;}
                    else if($lettres[$i] == "h" || $lettres[$i] == "H"){$lettresToNumb[$i]=7;}
                    else if($lettres[$i] == "i" || $lettres[$i] == "I"|| $lettres[$i] == "î"|| $lettres[$i] == "ï"){$lettresToNumb[$i]=8;}
                    else if($lettres[$i] == "j" || $lettres[$i] == "J"){$lettresToNumb[$i]=9;}
                    else if($lettres[$i] == "k" || $lettres[$i] == "K"){$lettresToNumb[$i]=10;}
                    else if($lettres[$i] == "l" || $lettres[$i] == "L"){$lettresToNumb[$i]=11;}
                    else if($lettres[$i] == "m" || $lettres[$i] == "M"){$lettresToNumb[$i]=12;}
                    else if($lettres[$i] == "n" || $lettres[$i] == "N"){$lettresToNumb[$i]=13;}
                    else if($lettres[$i] == "o" || $lettres[$i] == "O"|| $lettres[$i] == "ô"|| $lettres[$i] == "ö"){$lettresToNumb[$i]=14;}
                    else if($lettres[$i] == "p" || $lettres[$i] == "P"){$lettresToNumb[$i]=15;}
                    else if($lettres[$i] == "q" || $lettres[$i] == "Q"){$lettresToNumb[$i]=16;}
                    else if($lettres[$i] == "r" || $lettres[$i] == "R"){$lettresToNumb[$i]=17;}
                    else if($lettres[$i] == "s" || $lettres[$i] == "S"){$lettresToNumb[$i]=18;}
                    else if($lettres[$i] == "t" || $lettres[$i] == "T"){$lettresToNumb[$i]=19;}
                    else if($lettres[$i] == "u" || $lettres[$i] == "U"|| $lettres[$i] == "ù"|| $lettres[$i] == "û"){$lettresToNumb[$i]=20;}
                    else if($lettres[$i] == "v" || $lettres[$i] == "V"){$lettresToNumb[$i]=21;}
                    else if($lettres[$i] == "w" || $lettres[$i] == "W"){$lettresToNumb[$i]=22;}
                    else if($lettres[$i] == "x" || $lettres[$i] == "X"){$lettresToNumb[$i]=23;}
                    else if($lettres[$i] == "y" || $lettres[$i] == "Y"){$lettresToNumb[$i]=24;}
                    else if($lettres[$i] == "z" || $lettres[$i] == "Z"){$lettresToNumb[$i]=25;}
                    else {
                        $lettresToNumb[$i]="";
                    }
                }
                $affine = [];
                for($j=0;$j<count($lettresToNumb);$j++)
                {

                    $affine[$j] = $a*$lettresToNumb[$j]+$b;  
                    if($affine[$j]>25)
                    {
                        $affine[$j] = $affine[$j]%26;
                    }
                }
                $newlettres = [];
                for($k=0;$k<count($affine);$k++)
                {
                    if($affine[$k]==0){$newlettres[$k] = "A";}
                    else if($affine[$k]==1){$newlettres[$k] = "B";}
                    else if($affine[$k]==2){$newlettres[$k] = "C";}
                    else if($affine[$k]==3){$newlettres[$k] = "D";}
                    else if($affine[$k]==4){$newlettres[$k] = "E";}
                    else if($affine[$k]==5){$newlettres[$k] = "F";}
                    else if($affine[$k]==6){$newlettres[$k] = "G";}
                    else if($affine[$k]==7){$newlettres[$k] = "H";}
                    else if($affine[$k]==8){$newlettres[$k] = "I";}
                    else if($affine[$k]==9){$newlettres[$k] = "J";}
                    else if($affine[$k]==10){$newlettres[$k] = "K";}
                    else if($affine[$k]==11){$newlettres[$k] = "L";}
                    else if($affine[$k]==12){$newlettres[$k] = "M";}
                    else if($affine[$k]==13){$newlettres[$k] = "N";}
                    else if($affine[$k]==14){$newlettres[$k] = "O";}
                    else if($affine[$k]==15){$newlettres[$k] = "P";}
                    else if($affine[$k]==16){$newlettres[$k] = "Q";}
                    else if($affine[$k]==17){$newlettres[$k] = "R";}
                    else if($affine[$k]==18){$newlettres[$k] = "S";}
                    else if($affine[$k]==19){$newlettres[$k] = "T";}
                    else if($affine[$k]==20){$newlettres[$k] = "U";}
                    else if($affine[$k]==21){$newlettres[$k] = "V";}
                    else if($affine[$k]==22){$newlettres[$k] = "W";}
                    else if($affine[$k]==23){$newlettres[$k] = "X";}
                    else if($affine[$k]==24){$newlettres[$k] = "Y";}
                    else if($affine[$k]==25){$newlettres[$k] = "Z";}
                   
                }
                echo "</br>";
                echo "</br>";
                $msgfinal0 = implode("",$newlettres);
                
                $msgfinal1 = wordwrap($msgfinal0,5," ",1);
                    
                
                echo "Le message est  :  $msgfinal1   et les clés sont a = $a et b = $b ";





            }
            if(isset($_POST['dechiffrage']) && empty($_POST['chiffrage']))
            {
                $message = $_POST['dechiffrage'];
                
                $chaine = str_replace(array('û','ù','','^','\ ','|','{','}','€','=','*','%','ï','î','ô','ê','à','&','~','#','?','/',':','£','¤','$','ç','è','é','.','…','«','»', ',', '?', '!', ':'     ,   '(',')'     ,   " " ,'-', '°','"',"'","`","’",'_', ';', '.'), '', $message);
              
                echo "</br>";
                $lettres = str_split($chaine);
                $a=intval($_POST['a']);
                $b=intval($_POST['b']);
                echo "</br>";
                $ap=gmp_invert($a,26);
                $lettresToNumb =[];
                for($i=0;$i<count($lettres);$i++)
                {
                    if($lettres[$i] == "a" || $lettres[$i] == "A" || $lettres[$i] == "à"|| $lettres[$i] == "â"){$lettresToNumb[$i]=0;}
                    else if($lettres[$i] == "b" || $lettres[$i] == "B"){$lettresToNumb[$i]=1;}
                    else if($lettres[$i] == "c" || $lettres[$i] == "C"|| $lettres[$i] == "ç"){$lettresToNumb[$i]=2;}
                    else if($lettres[$i] == "d" || $lettres[$i] == "D"){$lettresToNumb[$i]=3;}
                    else if($lettres[$i] == "e" || $lettres[$i] == "E"|| $lettres[$i] == "é"|| $lettres[$i] == "è"|| $lettres[$i] == "ê"){$lettresToNumb[$i]=4;}
                    else if($lettres[$i] == "f" || $lettres[$i] == "F"){$lettresToNumb[$i]=5;}
                    else if($lettres[$i] == "g" || $lettres[$i] == "G"){$lettresToNumb[$i]=6;}
                    else if($lettres[$i] == "h" || $lettres[$i] == "H"){$lettresToNumb[$i]=7;}
                    else if($lettres[$i] == "i" || $lettres[$i] == "I"|| $lettres[$i] == "î"|| $lettres[$i] == "ï"){$lettresToNumb[$i]=8;}
                    else if($lettres[$i] == "j" || $lettres[$i] == "J"){$lettresToNumb[$i]=9;}
                    else if($lettres[$i] == "k" || $lettres[$i] == "K"){$lettresToNumb[$i]=10;}
                    else if($lettres[$i] == "l" || $lettres[$i] == "L"){$lettresToNumb[$i]=11;}
                    else if($lettres[$i] == "m" || $lettres[$i] == "M"){$lettresToNumb[$i]=12;}
                    else if($lettres[$i] == "n" || $lettres[$i] == "N"){$lettresToNumb[$i]=13;}
                    else if($lettres[$i] == "o" || $lettres[$i] == "O"|| $lettres[$i] == "ô"|| $lettres[$i] == "ö"){$lettresToNumb[$i]=14;}
                    else if($lettres[$i] == "p" || $lettres[$i] == "P"){$lettresToNumb[$i]=15;}
                    else if($lettres[$i] == "q" || $lettres[$i] == "Q"){$lettresToNumb[$i]=16;}
                    else if($lettres[$i] == "r" || $lettres[$i] == "R"){$lettresToNumb[$i]=17;}
                    else if($lettres[$i] == "s" || $lettres[$i] == "S"){$lettresToNumb[$i]=18;}
                    else if($lettres[$i] == "t" || $lettres[$i] == "T"){$lettresToNumb[$i]=19;}
                    else if($lettres[$i] == "u" || $lettres[$i] == "U"|| $lettres[$i] == "ù"|| $lettres[$i] == "û"){$lettresToNumb[$i]=20;}
                    else if($lettres[$i] == "v" || $lettres[$i] == "V"){$lettresToNumb[$i]=21;}
                    else if($lettres[$i] == "w" || $lettres[$i] == "W"){$lettresToNumb[$i]=22;}
                    else if($lettres[$i] == "x" || $lettres[$i] == "X"){$lettresToNumb[$i]=23;}
                    else if($lettres[$i] == "y" || $lettres[$i] == "Y"){$lettresToNumb[$i]=24;}
                    else if($lettres[$i] == "z" || $lettres[$i] == "Z"){$lettresToNumb[$i]=25;}
                    else {
                        $lettresToNumb[$i]="";
                    }
                }
                $numbtoLetter=[];
                for($j=0;$j<count($lettresToNumb);$j++)
                {
                   $numbtoLetter[$j]=($ap*($lettresToNumb[$j]-$b))%26; 
                }
                echo "</br>";
                $newlettres = [];
                for($k=0;$k<count($numbtoLetter);$k++)
                {
                    if($numbtoLetter[$k]==0){$newlettres[$k] = "A";}
                    else if($numbtoLetter[$k]==1){$newlettres[$k] = "B";}
                    else if($numbtoLetter[$k]==2){$newlettres[$k] = "C";}
                    else if($numbtoLetter[$k]==3){$newlettres[$k] = "D";}
                    else if($numbtoLetter[$k]==4){$newlettres[$k] = "E";}
                    else if($numbtoLetter[$k]==5){$newlettres[$k] = "F";}
                    else if($numbtoLetter[$k]==6){$newlettres[$k] = "G";}
                    else if($numbtoLetter[$k]==7){$newlettres[$k] = "H";}
                    else if($numbtoLetter[$k]==8){$newlettres[$k] = "I";}
                    else if($numbtoLetter[$k]==9){$newlettres[$k] = "J";}
                    else if($numbtoLetter[$k]==10){$newlettres[$k] = "K";}
                    else if($numbtoLetter[$k]==11){$newlettres[$k] = "L";}
                    else if($numbtoLetter[$k]==12){$newlettres[$k] = "M";}
                    else if($numbtoLetter[$k]==13){$newlettres[$k] = "N";}
                    else if($numbtoLetter[$k]==14){$newlettres[$k] = "O";}
                    else if($numbtoLetter[$k]==15){$newlettres[$k] = "P";}
                    else if($numbtoLetter[$k]==16){$newlettres[$k] = "Q";}
                    else if($numbtoLetter[$k]==17){$newlettres[$k] = "R";}
                    else if($numbtoLetter[$k]==18){$newlettres[$k] = "S";}
                    else if($numbtoLetter[$k]==19){$newlettres[$k] = "T";}
                    else if($numbtoLetter[$k]==20){$newlettres[$k] = "U";}
                    else if($numbtoLetter[$k]==21){$newlettres[$k] = "V";}
                    else if($numbtoLetter[$k]==22){$newlettres[$k] = "W";}
                    else if($numbtoLetter[$k]==23){$newlettres[$k] = "X";}
                    else if($numbtoLetter[$k]==24){$newlettres[$k] = "Y";}
                    else if($numbtoLetter[$k]==25){$newlettres[$k] = "Z";}
                   
                }
                
                $msgfinal0 = implode("",$newlettres);
                echo "Le message crypté était : $msgfinal0 avec les clés a = $a et b = $b";
            }            
            
  
    ?>
	</body>
</html> 