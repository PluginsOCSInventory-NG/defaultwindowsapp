$regApplications = Get-ItemProperty -Path HKLM:\HKEY_LOCAL_MACHINE\SOFTWARE\RegisteredApplications | Select *

$regApplications.PSObject.Properties | ForEach-Object {
	
	$xml += "<DEFAULTAPP>`n"
		
		$xml += "<NAME>" + $_.Name + "</NAME>`n"
		$xml += "<TYPE>" + $_.Value + "</TYPE>`n"
	 
	$xml += "</DEFAULTAPP>`n" 
}

echo $xml