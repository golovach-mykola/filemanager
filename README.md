# filemanager
Install:
1) clone this repository
2) in root directory run docker-compose up --build



API methods:
GET /api/file/list - get file list
GET /api/file?file=filename - get file by name
POST /api/file - upload file [field name must be "file"]
DELETE /api/file?file=filename - delete file
