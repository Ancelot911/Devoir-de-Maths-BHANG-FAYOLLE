<!doctype html>
<html lang="fr"> 
	<head >
		<meta charset="utf-8" />
        <title>Mise en pratique</title>
        
	</head>
	<body>
        <form method="POST" action="barcode.php">
            <h1>Veuillez entrer votre code en bits à changer en EAN 13 :</h1>
            <input type="text" name="bits"/>
            <input type="submit" value="Changer"/>
        </form>







        <?php
            if(isset($_POST['bits']))
            {
                $bytes = array(substr($_POST['bits'],0,3),substr($_POST['bits'],3,7),substr($_POST['bits'],10,7),substr($_POST['bits'],17,7),substr($_POST['bits'],24,7),substr($_POST['bits'],31,7),substr($_POST['bits'],38,7),substr($_POST['bits'],45,5),substr($_POST['bits'],50,7),substr($_POST['bits'],57,7),substr($_POST['bits'],64,7),substr($_POST['bits'],71,7),substr($_POST['bits'],78,7),substr($_POST['bits'],85,7),substr($_POST['bits'],92,3)) ;
                
                echo "</br>";
                
                $decode = [];
                $checkcode;
                $sommePair = 0;
                $sommeImpair = 0;
                $setval = [];
                for($i=0;$i<count($bytes);$i++)
                {
                    
                    
                    if($i!=0 && $i!=7 && $i!=14)
                    {
                        
                        if($i>0 && $i<7)
                        {
                            //SET A impairs
                            if($bytes[$i]=='0001101')
                            {
                                $indice0 = 0;
                                $decode[$i]= $indice0;
                                if($i==2){$setval[$i]= 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0011001')
                            {
                                $indice1  = 1 ;
                                $decode[$i]=$indice1;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0010011')
                            {
                                $indice2 = 2;
                                $decode[$i]=$indice2;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0111101')
                            {
                                $indice3 = 3;
                                $decode[$i] = $indice3;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0100011')
                            {
                                $indice4 = 4;
                                $decode[$i] = $indice4;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0110001')
                            {
                                $indice5 = 5;
                                $decode[$i] = $indice5;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0101111')
                            {
                                $indice6 = 6;
                                $decode[$i] = $indice6;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0111011')
                            {
                                $indice7 = 7;
                                $decode[$i] = $indice7;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0110111')
                            {
                                $indice8 = 8;
                                $decode[$i] = $indice8;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
                            if($bytes[$i]=='0001011' )
                            {
                                $indice9 = 9;
                                $decode[$i] = $indice9 ;
                                if($i==2){$setval[$i] = 'A';}
                                if($i==3){$setval[$i] = 'A';}
                                if($i==4){$setval[$i] = 'A';}
                                if($i==5){$setval[$i] = 'A';}
                                if($i==6){$setval[$i] = 'A';}
                            }
    
                            //SET B pairs
                            if($bytes[$i]=='0100111')
                            {
                                $indiceb0 = 0;
                                $decode[$i] = $indiceb0 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0110011')
                            {
                                $indiceb1 = 1;
                                $decode[$i] = $indiceb1 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0011011')
                            {
                                $indiceb2 = 2;
                                $decode[$i] = $indiceb2 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0100001')
                            {
                                $indiceb3 = 3;
                                $decode[$i] = $indiceb3 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0011101')
                            {
                                $indiceb4 = 4;
                                $decode[$i] = $indiceb4 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0111001')
                            {
                                $indiceb5 = 5;
                                $decode[$i] = $indiceb5 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0000101')
                            {
                                $indiceb6 = 6;
                                $decode[$i] = $indiceb6 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0010001')
                            {
                                $indiceb7 = 7;
                                $decode[$i] = $indiceb7 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0001001')
                            {
                                $indiceb8 = 8;
                                $decode[$i] = $indiceb8 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                            if($bytes[$i]=='0010111')
                            {
                                $indiceb9 = 9;
                                $decode[$i] = $indiceb9 ;
                                if($i==2){$setval[$i] = 'B';}
                                if($i==3){$setval[$i] = 'B';}
                                if($i==4){$setval[$i] = 'B';}
                                if($i==5){$setval[$i] = 'B';}
                                if($i==6){$setval[$i] = 'B';}
                            }
                        }
                        //SET C
                        if($i>7 && $i<14)
                        {
    
                            if($bytes[$i]=='1110010')
                            {
                                $indicec0 = 0;
                                $decode[$i]=0;
                            }
                            if($bytes[$i]=='1100110')
                            {
                                $indicec1 = 1;
                                $decode[$i]=1;
                            }
                            if($bytes[$i]=='1101100')
                            {
                                $indicec2 = 2;
                                $decode[$i]=2;
                                
                            }
                            if($bytes[$i]=='1000010')
                            {
                                $indicec3 = 3;
                                $decode[$i]=3;
                            }
                            if($bytes[$i]=='1011100')
                            {
                                $indicec4 = 4;
                                $decode[$i]=4;
                            }
                            if($bytes[$i]=='1001110')
                            {
                                $indicec5 = 5;
                                $decode[$i]=5;
                            }
                            if($bytes[$i]=='1010000')
                            {
                                $indicec6 = 6;
                                $decode[$i]=6;
                            }
                            if($bytes[$i]=='1000100')
                            {
                                $indicec7 = 7;
                                $decode[$i]=7;
                            }
                            if($bytes[$i]=='1001000')
                            {
                                $indicec8 = 8;
                                $decode[$i]=8;
                            }
                            if($bytes[$i]=='1110100')
                            {
                                $indicec9 = 9;
                                $decode[$i]=9;
                            }
     
                        }
                    }
            
                }
                
                if ($setval[2]=='A' && $setval[3]=='A' && $setval[4]=='A' && $setval[5]=='A' && $setval[6]=='A') 
                {
                    $val1 = 0;
                }
                if ($setval[2]=='A' && $setval[3]=='B' && $setval[4]=='A' && $setval[5]=='B' && $setval[6]=='B') 
                {
                    $val1 = 1;
                }
                if ($setval[2]=='A' && $setval[3]=='B' && $setval[4]=='B' && $setval[5]=='A' && $setval[6]=='B') 
                {
                    $val1 = 2;
                }
                if ($setval[2]=='A' && $setval[3]=='B' && $setval[4]=='B' && $setval[5]=='B' && $setval[6]=='A') 
                {
                    $val1 = 3;
                }
                if ($setval[2]=='B' && $setval[3]=='A' && $setval[4]=='A' && $setval[5]=='B' && $setval[6]=='B') 
                {
                    $val1 = 4;
                }
                if ($setval[2]=='B' && $setval[3]=='B' && $setval[4]=='A' && $setval[5]=='A' && $setval[6]=='B') 
                {
                    $val1 = 5;
                }
                if ($setval[2]=='B' && $setval[3]=='B' && $setval[4]=='B' && $setval[5]=='A' && $setval[6]=='A') 
                {
                    $val1 = 6;
                }
                if ($setval[2]=='B' && $setval[3]=='A' && $setval[4]=='B' && $setval[5]=='A' && $setval[6]=='B') 
                {
                    $val1 = 7;
                }
                if ($setval[2]=='B' && $setval[3]=='A' && $setval[4]=='B' && $setval[5]=='B' && $setval[6]=='A') 
                {
                    $val1 = 8;
                }
                if ($setval[2]=='B' && $setval[3]=='B' && $setval[4]=='A' && $setval[5]=='B' && $setval[6]=='A') 
                {
                    $val1 = 9;
                }
                $checkcode = ($val1+$decode[2]+$decode[4]+$decode[6]+$decode[9]+$decode[11]+$decode[13]) +(3*($decode[1]+$decode[3]+$decode[5]+$decode[8]+$decode[10]+$decode[12]));
                echo "</br>";
                $verif0 = $checkcode % 10;
                $valfinale = [$val1,$decode[1],$decode[2],$decode[3],$decode[4],$decode[5],$decode[6],$decode[8],$decode[9],$decode[10],$decode[11],$decode[12],$decode[13]];
                $ean13 = implode("",$valfinale);
                echo "</br>";
                if ($verif0==0) {

                    echo "Le code EAN 13 est :  $ean13";
                }
                else{
                    echo "Le code n'a pas pu être vérifié, il doit etre erroné . " ;
                }
                
                
                
                
            }
          

        ?>
	</body>
</html> 