(function() {
  let jsm = {};
  try {
    Cu.import("resource://gre/modules/SocialService.jsm", jsm);
  } catch(e) {}

  let SocialAPIHack = {
    _weibo: {
      author: 'SINA Corporation',
      description: '用一句话随意记录生活，用火狐随时随地发微博，迅速获取最热最火最快最酷最新的资讯',
      homepageURL: 'http://www.weibo.com',
      iconURL: 'data:image/png;base64,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',
      icon32URL: 'data:image/png;base64,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',
      icon64URL: 'data:image/png;base64,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',
      name: '新浪微博',
      origin: 'http://m.weibo.cn',
      sidebarURL: 'http://m.weibo.cn/sidebar/',
      statusURL: 'http://m.weibo.cn/msg',
      version: '0.2',
      workerURL: 'http://m.weibo.cn/js/social/worker.js'
    },

    _ensureLatestWeibo: function SocialAPIHack___ensureLatestWeibo(weibo) {
      let latestAddon = jsm.SocialService.createWrapper(weibo);
      let prefBranch = gPrefService.getBranch('social.');
      prefBranch.clearUserPref('manifest.facebook');
      let socialEnabled = undefined;
      try {
        socialEnabled = prefBranch.getBoolPref('enabled');
      } catch(e) {}

      AddonManager.getAddonByID(latestAddon.id, function(aAddon) {
        if (aAddon) {
          if (socialEnabled === false || aAddon.userDisabled) {
            // uninstall for those not currently enabled ?
            aAddon.uninstall();
          } else if (aAddon.version < latestAddon.version) {
            jsm.SocialService.updateProvider(weibo.origin, weibo);
          }
        }
      });
    },

    handleEvent: function SocialAPIHack__handleEvent(aEvent) {
      switch (aEvent.type) {
        case "load":
          this.init();
          break;
      }
    },

    init: function SocialAPIHack__init() {
      let self = this;
      let onBrowserDelayedStartup = function onBrowserDelayedStartup() {
        Services.obs.removeObserver(onBrowserDelayedStartup,
          "browser-delayed-startup-finished");

        self._ensureLatestWeibo(self._weibo);
      };

      if (gBrowserInit.delayedStartupFinished) {
        this._ensureLatestWeibo(this._weibo);
      } else {
        Services.obs.addObserver(onBrowserDelayedStartup,
          "browser-delayed-startup-finished", false);
      }
    },
  }
  window.addEventListener('load', SocialAPIHack, false);
})();
