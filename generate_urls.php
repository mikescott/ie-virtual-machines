<?php
$template = "https://az412801.vo.msecnd.net/vhd/VMBuild_20141027/platform/browser/host_os/browser.base_os.For.host_os.platform.zip";

$browsers = [
	'IE6' => ['XP'], 
	'IE8' => ['XP'],
	'IE7' => ['Vista']
];

$systems = [
	'Mac' => [
		'Parallels',
		'VirtualBox',
		'VMware'
	], 
	'Windows' => [
		'VirtualBox',
		'VMware',
		'VPC'
	]
];

foreach($systems as $os => $platforms) {
	foreach($platforms as $platform) {
		foreach($browsers as $browser => $base_oses) {
			foreach($base_oses as $base_os) {
				$url = str_replace('platform', $platform, $template);
				$url = str_replace('host_os', $os, $url);
				$url = str_replace('browser', $browser, $url);
				$url = str_replace('base_os', $base_os, $url);

				echo "{$browser} on {$base_os} for {$os} with {$platform}: {$url}\n";
			}

		}
	}
}