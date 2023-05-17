# Remote File Inclusion

The aim is to get the flag using this vulnerability, you can get also using LFI one.

First step, prepare your container:

```docker
docker build --tag rfi_php .
docker run -d -p 8080:80 --rm rfi_php
```

Once you have done, check the web page from your favourite browser or other tools (like curl).
Then try to get the flag using RFI, the flag path is `/etc/apache2/flag.txt`

***
