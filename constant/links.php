RewriteEngine On
RewriteBase /

# Rewrite "/page2" to "/page2.php"
RewriteCond %{choose} !-d
RewriteCond %{REQUES}.php -f
RewriteRule ^([^/]+)/?$ $1.php [L]
