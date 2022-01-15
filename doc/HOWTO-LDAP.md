- [HOME](../../../)

## How to do ldap commands
```
ldapsearch -H ldaps://ldapauth.server.com:636 -d 5 -x -w PASSWORD -D "CN=svcwfadmin,OU=ServiceAccounts,DC=cvcauth,DC=com" -b "OU=NetIDUsers,DC=cvcauth,DC=com" "(objectclass=*)"
```

## configs

## Other
