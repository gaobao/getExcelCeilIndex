function getExcelCeilIndex($row, $col) {
	if($row > 0 && $col > 0 )
	{
		$str     = "ZABCDEFGHIJKLMNOPQRSTUVWXY";
		$col_str = "";
		do
		{
			$col_tmp  = $col % 26;
			$col      = $col_tmp == 0 ? intval($col / 26) - 1 : intval($col / 26);
			$col_str  = $str[$col_tmp].$col_str;
		}while( $col );
		return  $col_str.$row;
	}
	return false;
}