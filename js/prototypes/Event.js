function Event() {
    
    var that = this;
    
    this.add = function(name) {
        that[name] = function(param) {
            if (typeof param === "function") {
                if (!that[name].handlers) {
                    that[name].handlers = [];
                }
                that[name].handlers.push(param);
            } else if (!!that[name].handlers) {
                for (var handlerIndex in that[name].handlers) {
                    that[name].handlers[handlerIndex](param);
                }
            }
        };
    };
    
}