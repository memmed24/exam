<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script   src="http://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php 
include 'db.php';
?>
	<div class="container">
		<div class="col-md-2">
			<select name="" id="selectbox" class="select" class="fa fa-arrow">
				<option value="az">
					Azerbaijan
				</option>
				<option value="tr">
					Turkey
				</option>
				<option value="rus">
					Russia
				</option>
			</select>	
			<input type="button" id="any" value="Select" style="margin-top: 15px;">
		</div>
		<script>
			$(document).ready(function($) {
				
			});
		</script>
		<div class="col-md-2">
			<select name="" class="select" id="city" >
				<script>
					$(document).ready(function(){
						$('#any').on('click', function() {
							var select = $('#selectbox option:selected').val();
							if(select == "az"){
								$("<option>Baku</option>").appendTo('#city');
								$("<option>Ganja</option>").appendTo('#city');
							}
							else if(select == "tr"){
								$("<option>Istanbul</option>").appendTo('#city');
								$("<option>Ankara</option>").appendTo('#city');	
							}
							else{
								$("<option>Moscow</option>").appendTo('#city');
								$("<option>Sank Petersburg</option>").appendTo('#city');
							}
						});
					});
				</script>
				<input style="display: block; margin-top: 15px;" value="Select" type="submit" id="cityselect">
			</select>
		</div>
		<div class="col-md-2 output">
			<script>
				$(document).ready(function() {
					$('#cityselect').on('click', function() {
						var selectedItem = $('#city option:selected').val();
						if(selectedItem == "Moscow"){
							$("<p>Moscow, on the Moskva River in western Russia, is the nation’s cosmopolitan capital. In its historic core is the Kremlin, a complex that’s home to the president and tsarist treasures in the Armoury. Outside its walls is Red Square, Russia's symbolic center. It's home to Lenin’s Mausoleum, the State Historical Museum's comprehensive collection and St. Basil’s Cathedral, known for its colorful, onion-shaped domes</p>").appendTo('.output');
						}
						else if(selectedItem == "Sank Petersburg"){
							$("<p>St. Petersburg is a Russian port city on the Baltic Sea. It was the imperial capital for 2 centuries, having been founded in 1703 by Peter the Great, subject of the city's iconic “Bronze Horseman” statue. It remains Russia's cultural center, with venues like the ultramodern Mariinsky Theatre hosting opera and ballet, and the State Russian Museum showcasing Russian art, from Orthodox icon paintings to Kandinsky works.</p>").appendTo('.output');
						}
						else if(selectedItem == "Baku"){
							$("<p>Baku, the capital and commercial hub of Azerbaijan, is a low-lying city with coastline along the Caspian Sea. It's famed for its medieval walled old city, which contains the Palace of the Shirvanshahs, a vast royal complex, and the iconic stone Maiden Tower. Contemporary landmarks include the Zaha Hadid–designed Heydar Aliyev Center, and the Flame Towers, 3 pointed skyscrapers covered with LED screens.</p>").appendTo('.output');
						}
						else if(selectedItem == "Ganja"){
							$("<p>Ganja (Persian: گنجه‎‎; in Azerbaijani: Gəncə, Ҝәнҹә [ˈgænd͡ʒæ]) is Azerbaijan's second largest city with a population close of about 325,200.[1][2] It was named Elisabethpol (Russian: Елизаветпо́ль, tr. Yelizavetpol; IPA: [jɪlʲɪzəvʲɪtˈpolʲ]) in the Russian Empire period. The city regained its original name Ganja in 1920 during the first part of its incorporation into the Soviet Union. However, its name was changed again in 1935 to Kirovabad (Russian: Кироваба́д; IPA: [kʲɪrəvɐˈbat]) and retained it throughout the later Soviet period from 1935. Finally in 1989, during Perestroika, the city regained the original name.</p>").appendTo('.output');
						}
						else if(selectedItem == "Istanbul"){
							$("<p>Istanbul is a major city in Turkey that straddles Europe and Asia across the Bosphorus Strait. Its Old City reflects cultural influences of the many empires that once ruled here. In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site of chariot races, and Egyptian obelisks also remain. The iconic Byzantine Hagia Sophia features a soaring 6th-century dome and rare Christian mosaics.</p>").appendTo('.output');
						}
						else if(selectedItem == "Ankara"){
							$("<p>Ankara, Turkey’s cosmopolitan capital, sits in the country’s central Anatolia region. It’s a center for the performing arts, home to the State Opera and Ballet, the Presidential Symphony Orchestra and several national theater companies. Overlooking the city is Anitkabir, the enormous hilltop mausoleum of Kemal Atatürk, modern Turkey’s first president, who declared Ankara the capital in 1923.</p>").appendTo('.output');
						}
						
					});
				});
			</script>
		</div>
	</div>
</body>
</html>