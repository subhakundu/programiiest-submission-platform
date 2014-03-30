programiiest-submission-platform
================================

This is the code we used to design our submission platform for RUST programming contest at IIEST Shibpur. It basically compresses a .rs file along with output file and coder can upload the file after that to a remote server.

index.php: It containes the code for home page as usual.
upload_file.php: It contains the code for uploading a file.
final_submission.sh: It is basically a shell script which compiles and compresses the object file and source code and coder uploads the zip file into remote server. 
