# -*- makefile -*-

peardir=$(PEAR_INSTALLDIR)

# Skip all php.ini files altogether
PEAR_INSTALL_FLAGS = -n -dshort_open_tag=0 -dsafe_mode=0 -derror_reporting=E_ALL -ddetect_unicode=0

install-pear-installer: $(top_builddir)/sapi/cli/php
	@$(top_builddir)/sapi/cli/php $(PEAR_INSTALL_FLAGS) $(srcdir)/install-pear-nozlib.phar -d "$(peardir)" -b "$(bindir)"

install-pear:
	@echo "Installing PEAR environment:      $(INSTALL_ROOT)$(peardir)/"
	@if test ! -f $(srcdir)/install-pear-nozlib.phar; then \
		wget http://pear.php.net/install-pear-nozlib.phar -nd -P $(srcdir);  \
	fi
	@if test -f $(srcdir)/install-pear-nozlib.phar && $(mkinstalldirs) $(INSTALL_ROOT)$(peardir); then \
		$(MAKE) -s install-pear-installer; \
	else \
		cat $(srcdir)/install-pear.txt; \
	fi

