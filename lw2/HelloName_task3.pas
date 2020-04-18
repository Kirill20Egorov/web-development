PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  GPC;
VAR
  Name: STRING;
BEGIN
  WRITELN;
  Name := GetEnv('QUERY_STRING');
  IF (Name[1] = 'n') AND (Name[2] = 'a') AND (Name[3] = 'm') AND (Name[4] = 'e') AND (Name[5] = '=')
  THEN
    BEGIN
      DELETE(Name, 1, 5);
      IF Name <> ''
      THEN
        WRITELN('Hello, dear ', Name)
    END
  ELSE 
    WRITELN('Hello, Anonymous')
END.

