Successfully received certificate.
Certificate is saved at: /home/app-home/live/app-fqdn.com/fullchain.pem
Key is saved at:         /home/app-home/live/app-fqdn.com/privkey.pem
This certificate expires on 2024-01-26.
These files will be updated when the certificate renews.

NEXT STEPS:
- This certificate will not be renewed automatically. Autorenewal of --manual certificates requires the use of an authentication hook script (--manual-auth-hook) but one was not provided. To renew this certificate, repeat this same certbot command before the certificate's expiry date.

certbot certonly -a manual --preferred-challenges dns -d *.app-fqdn.com --work-dir=/home/app-home --logs-dir=/home/app-home --config-dir=/home/app-home
