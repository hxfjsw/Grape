
#ifndef PHP_GRAPE_H
#define PHP_GRAPE_H

extern zend_module_entry Grape_module_entry;
#define phpext_Grape_ptr &Grape_module_entry

#define PHP_GRAPE_VERSION "0.1.0" /* Replace with version number for your extension */

#ifdef PHP_WIN32
#	define PHP_GRAPE_API __declspec(dllexport)
#elif defined(__GNUC__) && __GNUC__ >= 4
#	define PHP_GRAPE_API __attribute__ ((visibility("default")))
#else
#	define PHP_GRAPE_API
#endif

#ifdef ZTS
#include "TSRM.h"
#endif

/*
  	Declare any global variables you may need between the BEGIN
	and END macros here:

ZEND_BEGIN_MODULE_GLOBALS(Grape)
	zend_long  global_value;
	char *global_string;
ZEND_END_MODULE_GLOBALS(Grape)
*/

/* Always refer to the globals in your function as GRAPE_G(variable).
   You are encouraged to rename these macros something shorter, see
   examples in any other php module directory.
*/
#define GRAPE_G(v) ZEND_MODULE_GLOBALS_ACCESSOR(Grape, v)

#if defined(ZTS) && defined(COMPILE_DL_GRAPE)
ZEND_TSRMLS_CACHE_EXTERN();
#endif

//region MainServer
PHP_METHOD (MainServer, __construct);
PHP_METHOD (MainServer, __destruct);
PHP_METHOD (MainServer, onStart);
const zend_function_entry mainServer_functions[] = {
        PHP_ME(MainServer, __construct, NULL, ZEND_ACC_PUBLIC | ZEND_ACC_CTOR)
        PHP_ME(MainServer, __destruct, NULL, ZEND_ACC_PUBLIC | ZEND_ACC_DTOR)
        PHP_ME(Person, onStart, NULL, ZEND_ACC_PUBLIC | ZEND_ACC_ABSTRACT)
        PHP_FE_END
};

//endregion

#endif	/* PHP_GRAPE_H */

