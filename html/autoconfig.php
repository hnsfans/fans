<?php 
header("Content-Type: application/octet-stream");
#header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"autoconfig.mobileconfig\""); 
$email = $_POST["email"];
$password = $_POST["password"];
?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
	<key>PayloadContent</key>
	<array>
		<dict>
			<key>EmailAccountDescription</key>
			<string>hmail.hnsfans.config</string>
			<key>EmailAccountName</key>
            <string><?php echo $email ?></string>
			<key>EmailAccountType</key>
			<string>EmailTypeIMAP</string>
			<key>EmailAddress</key>
            <string><?php echo $email;?></string>
			<key>IncomingMailServerAuthentication</key>
			<string>EmailAuthPassword</string>
			<key>IncomingMailServerHostName</key>
			<string>hmail.app</string>
			<key>IncomingMailServerIMAPPathPrefix</key>
			<string>hmail.app</string>
			<key>IncomingMailServerPortNumber</key>
			<integer>993</integer>
			<key>IncomingMailServerUseSSL</key>
			<true/>
			<key>IncomingMailServerUsername</key>
            <string><?php echo $email ?></string>
			<key>IncomingPassword</key>
            <string><?php echo $password; ?></string>
			<key>OutgoingMailServerAuthentication</key>
			<string>EmailAuthPassword</string>
			<key>OutgoingMailServerHostName</key>
			<string>hmail.app</string>
			<key>OutgoingMailServerPortNumber</key>
			<integer>465</integer>
			<key>OutgoingMailServerUseSSL</key>
			<true/>
			<key>OutgoingMailServerUsername</key>
            <string><?php echo $email;?></string>
			<key>OutgoingPasswordSameAsIncomingPassword</key>
			<true/>
			<key>PayloadDescription</key>
			<string>配置电子邮件设置</string>
			<key>PayloadDisplayName</key>
			<string>hmail.app</string>
			<key>PayloadIdentifier</key>
			<string>com.apple.mail.managed.A07ACB52-59E6-4E27-8718-CC01C6F3B1C6</string>
			<key>PayloadType</key>
			<string>com.apple.mail.managed</string>
			<key>PayloadUUID</key>
			<string>A07ACB52-59E6-4E27-8718-CC01C6F3B1C6</string>
			<key>PayloadVersion</key>
			<integer>1</integer>
			<key>SMIMEEnablePerMessageSwitch</key>
			<false/>
			<key>SMIMEEnabled</key>
			<false/>
			<key>SMIMEEncryptionEnabled</key>
			<false/>
			<key>SMIMESigningEnabled</key>
			<false/>
			<key>allowMailDrop</key>
			<false/>
			<key>disableMailRecentsSyncing</key>
			<false/>
		</dict>
	</array>
	<key>PayloadDisplayName</key>
	<string>auto_config_hmail_app</string>
	<key>PayloadIdentifier</key>
	<string>simplemac-x.41EBCC37-D061-43BA-848C-40B4D117DE3C</string>
	<key>PayloadRemovalDisallowed</key>
	<false/>
	<key>PayloadType</key>
	<string>Configuration</string>
	<key>PayloadUUID</key>
	<string>71F7C620-300A-4C9B-9319-E50DABC91119</string>
	<key>PayloadVersion</key>
	<integer>1</integer>
</dict>
</plist>
