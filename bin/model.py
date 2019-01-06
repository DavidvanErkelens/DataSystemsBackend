import json
import sys

def main():
    data = sys.argv[1]

    response = {'result' : data}

    print(json.dumps(response))


if __name__ == "__main__":
    main()