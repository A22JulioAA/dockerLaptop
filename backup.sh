#!/bin/bash
docker compose exec basededatos bash -c "mysqldump -u user -p minhabd" > bd/backup/backup.sql