<?php include("includes/includedFiles.php"); ?>

<h1 class="pageHeadingBig">Your Music Library</h1>

<div class="gridViewContainer">
	<?php
		$albumQuery = mysqli_query($con, "SELECT * FROM albums");
	
		while($row = mysqli_fetch_array($albumQuery)) {
			echo "
				<div class='gridViewItem'>
					<span role='link' tabindex='0' onclick='openPage(\"album.php?id=" . $row['id'] . "\")'>
						<img src='" . $row['artworkPath'] . "' />
						<div class='gridViewInfo'>"
							. $row['title'] .
						"</div>
					</span>
				</div>
			";
		}
	?>
</div>
