dev development: # Build application for development
	@composer install --no-interaction
	@npm install && npm run dev
	@vendor/bin/jigsaw build

prod production: # Build application for production
	@composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
	@npm install --no-save && npm run production && npm prune --production
	@vendor/bin/jigsaw build production

update upgrade: # Update application dependencies
	@composer update && npm update && npm install
