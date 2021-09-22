#!/bin/sh

if [ ! -e /tmp/init ]; then
	touch /tmp/init

	echo "DROP DATABASE IF EXISTS test;" >> /tmp/init

	if [ -n "wordpress" ]; then
		echo "** creating database: wordpress"
		echo "CREATE DATABASE IF NOT EXISTS \`wordpress\`;" >> /tmp/init
		if [ -n "hnabil" ] && [ -n "hnabil" ]; then
			echo "GRANT ALL ON \`wordpress\`.* TO 'hnabil'@'%' IDENTIFIED BY 'hnabil';" >> /tmp/init
		fi
	fi
	echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '123';" >> /tmp/init
	echo "FLUSH PRIVILEGES;" >> /tmp/init

fi
exec "$@"