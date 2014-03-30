rustc $1;
FILE=$1;
#./"${FILE%.rs}";
prefix="${FILE%.rs}";
files_required=$(echo $prefix*);
zip $prefix.zip $files_required;
rm $prefix;
