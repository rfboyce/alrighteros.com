<form method='POST' action='/posts/p_add'>
   <?php if($error=="blank"): ?>
		<div class='error'>
		   Post failed. Please supply a valid URL and description.
		</div>
		<br>
   <?php endif; ?>

	<label for='photo_url'>Photo URL:</label><br>
	<textarea name='photo_url' class='wide_text'></textarea>
    <div id='photo_url_error'>Please enter a valid URL.</div> 
	<br><br>

    <label for='content'>Description:</label><br>
    <textarea name='content' class='tall_text'></textarea>

    <br><br>
    <input type='submit' value='Submit new post'>

</form> 