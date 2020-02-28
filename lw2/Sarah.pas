PROGRAM PrintHello(INPUT, OUTPUT);
USES 
  GPC;
VAR
  Check: STRING;
BEGIN {PrintHello}
  WRITELN;
  Check := GetEnv('QUERY_STRING');
  IF Check = 'lanterns1'
  THEN
    WRITELN('The British Are Coming By Land')
  ELSE
    IF Check = 'lanterns2'
    THEN
      WRITELN('The British Are Coming By Sea')
    ELSE
      WRITELN('The Chorch Shows Only', Check)
END. {PrintHello}

