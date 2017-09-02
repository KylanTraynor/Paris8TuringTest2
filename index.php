<?php 
    session_start();

    if (!isset($_SESSION['userid'])): 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Paris8 Online Study</title>
    
    <link rel="stylesheet" type="text/css" href="main.css" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2" type="text/javascript"></script>
    <script type="text/javascript" src="check.js"></script>
</head>

<body>

    <div id="page-wrap"> 
    
    	<div id="header">
        	<h1><a href="http://www.univ-paris8.fr/en/" target="_blank">Paris8</a></h1>
        </div>
        
    	<div id="section">
        	<form method="post" action="jumpin.php">
				<p>(!)Please use a computer. Phones have a tendency to not update the chat. Use something like Chrome, Firefox or Edge (All 3 were tested.)</p>
            	<label>Username:</label><br/>
				<p>This username will be displayed during the conversation. Please do not use informations you are not willing to share. (Avoid using your actual name.)</p>
                <input type="text" id="userid" name="userid" /><br/><br/>
				<label>E-mail:</label><br/>
				<p>Entering an e-mail address will give us the possibility to contact you later to give you access to the results of this study. It is not required in order to participate, will only be kept for the duration of this study and will not be given to any third-party.</p>
				<input type="text" id="usermail" name="usermail" /><br/><br/>
				<div class="field form-inline radio" id="usergender">
					<label class="radio" for="txtGender">Gender: <label/><br/>
					<input class="radio" type="radio" name="usergender" value="female" checked="true"/><span>Female</span>
					<input class="radio" type="radio" name="usergender" value="male"/><span>Male</span>
				</div>
				<label>Age:</label><br/>
				<input type="text" id="userage" name="userage" /><br/><br/>
				<label>Country of Residence</label><br/>
				<p>Please type below the name of the country you've lived in for the majority (>50%) of the last 10 years.</p>
				<input type="text" id="usernationality" name="usernationality" /><br/><br/>
				<label>Field of study/Profession</label><br/>
				<p>Please type below your field of study if you're a student, or your career otherwise.</p>
				<input type="text" id="userfield" name="userfield" /><br/><br/>
				<label>Artificial Intelligence Knowledge:</label><br/>
				<p>Please type below a number between 1 and 7 rating your knowledge of Artificial Intelligence. 1 meaning no knowledge, 7 meaning expert.</p>
				<input type="text" id="useria" name="useria" /><br/><br/>
				<label>Computer Science Knowledge:</label><br/>
				<p>Please type below a number between 1 and 7 rating your knowledge of Computer Science. 1 meaning no knowledge, 7 meaning expert.</p>
				<input type="text" id="usercs" name="usercs" /><br/><br/>
				<label>Consent Form</label><br/>
				<p>The purpose of this research project is to investigate the properties of human textual conversations. This is a research project being conducted by Baptiste Jacquet at Paris8 University. By clicking on the button below, you certify that your participation in this research study is voluntary. You may choose not to participate. If you decide to participate in this research study, you may withdraw at any time. If you decide not to participate in this study or if you withdraw from participating at any time, you will not be penalized. The procedure involves an online chat with two interlocutors which will take between 5 and 30 minutes. Your conversations will be confidential and we do not collect identifying information such as your name or IP address. By clicking on the button below, you certify having been informed that the textual conversation you're about to have is going to be recorded for the purpose of research in Artificial Intelligence and Human Cognition. You also certify having been informed that your e-mail address will only be used to contact you directly, and will not be shared or used beyond the scope of this study.</p>
				<p>Electronic Consent:</p>
				<p>Clicking on the "I agree and I am ready to start" button bellow indicates that:</p>
				<p>- You have read the above information</p>
				<p>- You voluntarily agree to participate</p>
				<p>- You are at least 18 years of age</p>
				<p>If you do not wish to participate in this study, please close this webpage instead.</p>
                <input type="submit" value="I agree and I am ready to start" id="jumpin" />
            </form>
        </div>
		
		<div id="footer">
			<p>Chat developped by Baptiste Jacquet from a model by Chris Coyier available on <a href="https://css-tricks.com/chat2/" target="_blank">CSS-TRICKS</a>.</p>
		</div>
        
        <div id="status">
        	<?php if (isset($_GET['error'])): ?>
        		<!-- Display error when returning with error URL param? -->
        	<?php endif;?>
        </div>
        
    </div>
    
</body>

</html>

<?php 
    else:
        require_once("chatrooms.php");
    endif; 
?>