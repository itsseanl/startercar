<?php
	$db = new SQLite3('startercar.sqlite');
	
	$sql = 'CREATE TABLE IF NOT EXISTS "startercar" ( "model" TEXT PRIMARY KEY NOT NULL UNIQUE, "make" TEXT NOT NULL, "year" TEXT, "MPG" TEXT, "description" TEXT, "KBB Value" TEXT)';
	$db->exec($sql) or die("Create Table Failed");
	
	$sql = 'INSERT OR REPLACE INTO "startercar" VALUES ("500 Abarth", "Fiat", "2013", "28cty/32hwy", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien arcu, luctus vel enim sed, elementum laoreet ex. Donec venenatis lorem lorem, quis mollis leo malesuada rutrum. Nunc in mi tortor. Donec velit tellus, dignissim luctus interdum eu, tincidunt ac dolor. Fusce nibh turpis, viverra sed malesuada et, condimentum nec nibh. Praesent sapien massa, gravida ac feugiat eu, vulputate in felis. Etiam faucibus risus laoreet tincidunt finibus. Pellentesque urna lorem, euismod ac turpis id, dapibus tincidunt ex. Curabitur ut magna tincidunt, facilisis justo non, consequat augue. In et pellentesque odio. Vestibulum volutpat lacus eget ullamcorper viverra. Quisque at scelerisque neque, eu pellentesque urna. Sed efficitur tincidunt diam, nec laoreet felis egestas at. Donec vestibulum, dui quis maximus finibus, ante dolor aliquam urna, ac convallis justo tellus ac ipsum.")';
	
	$db->exc($sql) or die('Add data failed');
	
	$sql = 'INSERT OR REPLACE INTO "startercar" VALUES ("Wrangler", "Jeep", "1997-2006", "16cty/20hwy", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien arcu, luctus vel enim sed, elementum laoreet ex. Donec venenatis lorem lorem, quis mollis leo malesuada rutrum. Nunc in mi tortor. Donec velit tellus, dignissim luctus interdum eu, tincidunt ac dolor. Fusce nibh turpis, viverra sed malesuada et, condimentum nec nibh. Praesent sapien massa, gravida ac feugiat eu, vulputate in felis. Etiam faucibus risus laoreet tincidunt finibus. Pellentesque urna lorem, euismod ac turpis id, dapibus tincidunt ex. Curabitur ut magna tincidunt, facilisis justo non, consequat augue. In et pellentesque odio. Vestibulum volutpat lacus eget ullamcorper viverra. Quisque at scelerisque neque, eu pellentesque urna. Sed efficitur tincidunt diam, nec laoreet felis egestas at. Donec vestibulum, dui quis maximus finibus, ante dolor aliquam urna, ac convallis justo tellus ac ipsum.")';

	$db->exc($sql) or die('Add data failed');
	
	$sql = 'INSERT OR REPLACE INTO "startercar" VALUES ("Miata", "Mazda", "1989-1997", "22cty/28hwy", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sapien arcu, luctus vel enim sed, elementum laoreet ex. Donec venenatis lorem lorem, quis mollis leo malesuada rutrum. Nunc in mi tortor. Donec velit tellus, dignissim luctus interdum eu, tincidunt ac dolor. Fusce nibh turpis, viverra sed malesuada et, condimentum nec nibh. Praesent sapien massa, gravida ac feugiat eu, vulputate in felis. Etiam faucibus risus laoreet tincidunt finibus. Pellentesque urna lorem, euismod ac turpis id, dapibus tincidunt ex. Curabitur ut magna tincidunt, facilisis justo non, consequat augue. In et pellentesque odio. Vestibulum volutpat lacus eget ullamcorper viverra. Quisque at scelerisque neque, eu pellentesque urna. Sed efficitur tincidunt diam, nec laoreet felis egestas at. Donec vestibulum, dui quis maximus finibus, ante dolor aliquam urna, ac convallis justo tellus ac ipsum.")';

	$db->exc($sql) or die('Add data failed');

	
	
	
	?>