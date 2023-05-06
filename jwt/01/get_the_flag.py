#!/bin/python3
import sys
import jwt


if __name__ == '__main__':
    if len(sys.argv) != 3:
        print(f"[-] Invalid arguments, run ./{sys.argv[0]} <JWT TOKEN> <SECRET>")
        sys.exit(-1)
    
    try:
        jwt_token = sys.argv[1]
        secret = sys.argv[2]
        payload = jwt.decode(jwt_token, secret, algorithms="HS256")
        
        print(f"[+] Payload: {payload}")
        print("[+] Flag: jwt{booooom}")
        
    except Exception as ex:
        print(f"[-] {ex}")

