<?php
	class ana{
		const version="1.0";
		const maker="Mustafa Çolakoğlu";
		public function temizle($temizlenen,$belirli=false){
			if($belirli==""){
				$cikar="'".'";/.,*=-+abcçdefgğhıijklmnoöprsştuüvyzABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ';
			}
			else{
				$cikar=$belirli;
			}
			$count=strlen($cikar);
			$temizle=$temizlenen;
			for($i=0;$i<$count;$i++){
				$temizle=str_replace(substr($cikar,$i,1),"",$temizle);
			}
			return $temizle;
		}
		public function merl($baslanacak,$bitecek,$veri){
			$al=0;
			$yirmi=0;
			$yeniVeri="";
				for($i=0;$i<=strlen($veri);$i++){
					if(substr($veri,$i,strlen($baslanacak))==$baslanacak){
						$al=1;
					}else{}
					if(substr($veri,$i,strlen($bitecek))==$bitecek){
						$al=0;
						break;
					}
					else{}
					if($al==1){
						$yeniVeri=$yeniVeri.substr($veri,$i,1);
					}
					else{}
				}
			return $yeniVeri;
		}
	var	$sayac=0;
	public function duzenle($yazi){
			global $sayac;
			$a=$this->merl("[LINK]","[/LINK]",$yazi);
			$a=str_replace("[LINK]","",$a);
			$a=str_replace("[/LINK]","",$a);
			$y='<a href="'.$a.'" class="link">'.$a.'</a>';
			$yazi=str_replace("[LINK]".$a."[/LINK]",$y,$yazi);
			$sayac++;
			
			
			$a=$this->merl("[IMG]","[/IMG]",$yazi);
			$a=str_replace("[IMG]","",$a);
			$a=str_replace("[/IMG]","",$a);
			$y='<img src="'.$a.'" alt="" class="resim" />';
			$yazi=str_replace("[IMG]".$a."[/IMG]",$y,$yazi);
			$sayac++;
			$a=$this->merl("[HTML]","[/HTML]",$yazi);
			$a=str_replace("[HTML]","",$a);
			$a=str_replace("[/HTML]","",$a);
			$y='<h2>HTML KOD:</h2><br /><div id="kod'.$sayac.'" class="editor">'.$a.'</div><script src="http://ace.c9.io/build/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><script>var editor = ace.edit("kod'.$sayac.'");editor.setTheme("ace/theme/clouds");editor.getSession().setMode("ace/mode/html");</script>';
			$yazi=str_replace("[HTML]".$a."[/HTML]",$y,$yazi);
			$sayac++;
			$a=$this->merl("[CSS]","[/CSS]",$yazi);
			$a=str_replace("[CSS]","",$a);
			$a=str_replace("[/CSS]","",$a);
			$y='<h2>CSS KOD:</h2><div id="kod'.$sayac.'" class="editor">'.$a.'</div><script src="http://ace.c9.io/build/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><script>var editor = ace.edit("kod'.$sayac.'");editor.setTheme("ace/theme/clouds");editor.getSession().setMode("ace/mode/css");</script>';
			$yazi=str_replace("[CSS]".$a."[/CSS]",$y,$yazi);
			$sayac++;
			$a=$this->merl("[PHP]","[/PHP]",$yazi);
			$a=str_replace("[PHP]","",$a);
			$a=str_replace("[/PHP]","",$a);
			$y='<h2>PHP KOD:</h2><div id="kod'.$sayac.'" class="editor">'.$a.'</div><script src="http://ace.c9.io/build/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><script>var editor = ace.edit("kod'.$sayac.'");editor.setTheme("ace/theme/clouds");editor.getSession().setMode("ace/mode/php");</script>';
			$yazi=str_replace("[PHP]".$a."[/PHP]",$y,$yazi);
			$sayac++;
			$a=$this->merl("[JS]","[/JS]",$yazi);
			$a=str_replace("[JS]","",$a);
			$a=str_replace("[/JS]","",$a);
			$y='<h2>JS KOD:</h2><div id="kod'.$sayac.'" class="editor">'.$a.'</div><script src="http://ace.c9.io/build/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script><script>var editor = ace.edit("kod'.$sayac.'");editor.setTheme("ace/theme/clouds");editor.getSession().setMode("ace/mode/js");</script>';
			$yazi=str_replace("[JS]".$a."[/JS]",$y,$yazi);
			$sayac++;
			return $yazi;
		}
	}
?>