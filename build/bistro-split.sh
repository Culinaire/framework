git subsplit init git@github.com:culinaire/framework.git
git subsplit publish --heads="master" --no-tags src/Bistro/Products:git@bitbucket.org:mcbc/products.git
rm -rf .subsplit/