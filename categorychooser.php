<?php		
function categorychooser($i)
{
	switch ($i) {
		case '1':
			echo $catrow['name'];
			break;

			case '2':
			echo $enquiryrow['name'];
			break;

			case '3':
			echo $bulkrow['name'];
			break;
		
		default:
			echo $mintcat['name'];	
		break;
	}
}