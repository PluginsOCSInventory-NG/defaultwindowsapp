$regApplications = Get-ItemProperty -Path HKLM:\HKEY_LOCAL_MACHINE\SOFTWARE\RegisteredApplications | Select *

$regApplications.PSObject.Properties | ForEach-Object {
	
	$xml += "<DEFAULTWINDOWSAPP>`n"
		
		$xml += "<NAME>" + $_.Name + "</NAME>`n"
		$xml += "<TYPE>" + $_.Value + "</TYPE>`n"
	 
	$xml += "</DEFAULTWINDOWSAPP>`n" 
}

echo $xml