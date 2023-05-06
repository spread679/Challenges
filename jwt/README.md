# JWT Challenges

I prepare this repository to learn something about JWT.
In this folder you'll find a simple python script to generate a simmetrict JWT (maybe in the future will bel improve).
To use it prepare your enviornment `python3 -m venv venv`, then change it e install the requirements `pip3 -r requirements.txt`.

If you need a JWT:

```bash
chmod +x jwt_generator.py
./jwt_generator.py \<SECRET\>
```

SECRET will be your private key.

In the ./01 folder you'll find a very easy challege. In the same python enviorment you can run another script, get_the_flag.py, if you'll find the secreat use in the jwt_token file very good. To run the script `./get_the_flag.py \<JWT TOKEN\> \<SECRET\>`

***
