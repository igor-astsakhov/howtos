For better viewing with sqlplus

If you're using sqlplus you may want to first set up a few parameters for nicer viewing if your columns are getting mangled (these variables should not persist after you exit your sqlplus session ):

set colsep '|'
set linesize 167
set pagesize 30
set pagesize 1000
Show All Tables

You can then use something like this to see all table names:

SELECT table_name, owner, tablespace_name FROM all_tables;
Show Tables You Own

As @Justin Cave mentions, you can use this to show only tables that you own:

SELECT table_name FROM user_tables;
Don't Forget about Views

Keep in mind that some "tables" may actually be "views" so you can also try running something like:

SELECT view_name FROM all_views;
