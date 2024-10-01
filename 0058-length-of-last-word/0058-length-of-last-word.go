func lengthOfLastWord(s string) int {
	l := len(s)
	ws := false
	wc := 0
	for i := l - 1; i >= 0; i-- {
		if s[i] == 32 {
			if ws {
				break
			} else {
				continue
			}
		}
		if ws == false {
			ws = true
		}
		wc++
		l--
	}

	return wc
}