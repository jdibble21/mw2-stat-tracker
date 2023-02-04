from cod_api import API, platforms

import asyncio

sso_key = "MTUyMjk2MjgwMjQ1Njg5MjE5Nzk6MTY3Mjk1MjU0NzExMDoyMjYxMjY5ZTUyZmJiNGFlZDAxNGFlN2JiNDg1MTAwNw"


async def getCombatHistory():
    # login in with sso token
    api = await API()
    await api.loginAsync(sso_key)
    # retrieving combat history
    hist = await api.ModernWarfare2.combatHistory(platforms.XBOX, "TarsalSnip3r") # returns data of type dict
    print(hist)

loop = asyncio.get_event_loop()
await asyncio.run(getCombatHistory)