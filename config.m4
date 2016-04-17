dnl $Id$
dnl config.m4 for extension Grape

dnl Comments in this file start with the string 'dnl'.
dnl Remove where necessary. This file will not work
dnl without editing.

dnl If your extension references something external, use with:

dnl PHP_ARG_WITH(Grape, for Grape support,
dnl Make sure that the comment is aligned:
dnl [  --with-Grape             Include Grape support])

dnl Otherwise use enable:

dnl PHP_ARG_ENABLE(Grape, whether to enable Grape support,
dnl Make sure that the comment is aligned:
dnl [  --enable-Grape           Enable Grape support])

if test "$PHP_GRAPE" != "no"; then
  dnl Write more examples of tests here...

  dnl # --with-Grape -> check with-path
  dnl SEARCH_PATH="/usr/local /usr"     # you might want to change this
  dnl SEARCH_FOR="/include/Grape.h"  # you most likely want to change this
  dnl if test -r $PHP_GRAPE/$SEARCH_FOR; then # path given as parameter
  dnl   GRAPE_DIR=$PHP_GRAPE
  dnl else # search default path list
  dnl   AC_MSG_CHECKING([for Grape files in default path])
  dnl   for i in $SEARCH_PATH ; do
  dnl     if test -r $i/$SEARCH_FOR; then
  dnl       GRAPE_DIR=$i
  dnl       AC_MSG_RESULT(found in $i)
  dnl     fi
  dnl   done
  dnl fi
  dnl
  dnl if test -z "$GRAPE_DIR"; then
  dnl   AC_MSG_RESULT([not found])
  dnl   AC_MSG_ERROR([Please reinstall the Grape distribution])
  dnl fi

  dnl # --with-Grape -> add include path
  dnl PHP_ADD_INCLUDE($GRAPE_DIR/include)

  dnl # --with-Grape -> check for lib and symbol presence
  dnl LIBNAME=Grape # you may want to change this
  dnl LIBSYMBOL=Grape # you most likely want to change this 

  dnl PHP_CHECK_LIBRARY($LIBNAME,$LIBSYMBOL,
  dnl [
  dnl   PHP_ADD_LIBRARY_WITH_PATH($LIBNAME, $GRAPE_DIR/$PHP_LIBDIR, GRAPE_SHARED_LIBADD)
  dnl   AC_DEFINE(HAVE_GRAPELIB,1,[ ])
  dnl ],[
  dnl   AC_MSG_ERROR([wrong Grape lib version or lib not found])
  dnl ],[
  dnl   -L$GRAPE_DIR/$PHP_LIBDIR -lm
  dnl ])
  dnl
  dnl PHP_SUBST(GRAPE_SHARED_LIBADD)

  PHP_NEW_EXTENSION(Grape, Grape.c, $ext_shared,, -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1)
fi
