
dir -r | % {if ($_ -like "*.php")
		{
			echo $_.name
			html $_.name zzz.txt
		}
	}