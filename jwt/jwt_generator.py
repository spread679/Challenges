import sys
import jwt


if __name__ == '__main__':
    if len(sys.argv) != 2:
        print(f"[-] Invalid arguments, run ./{sys.argv[0]} <SECRET>")
        sys.exit(-1)
    
    secret = sys.argv[1]
    jwt_token = jwt.encode({"some":"payload"}, secret, algorithm="HS256")
    
    f = open("jwt_token", "w")
    f.write(jwt_token)
    f.close()
    print('[+] JWT token generated.')

