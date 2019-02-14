# filemanager
Install:
1) clone this repository
2) in root directory run docker-compose up --build



API methods:
1) GET /api/file/list - get file list
2) GET /api/file?file=filename - get file by name
3) POST /api/file - upload file [field name must be "file"]
4) DELETE /api/file?file=filename - delete file
