PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  GPC;
VAR
  Name: STRING;
BEGIN
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  DELETE(Name, 1, 5);
  IF Name <> ''
  THEN
    WRITELN('Hello, dear ', Name)
  ELSE 
    WRITELN('Hello, Anonymous')
END.

